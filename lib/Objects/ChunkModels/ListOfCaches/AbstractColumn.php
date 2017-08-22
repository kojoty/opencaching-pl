<?php
namespace lib\Objects\ChunkModels\ListOfCaches;

use Utils\Debug\Debug;


/**
 * This is an abstract column for listOfCaches chunk.
 * Every implementation of this class should:
 *  - define getChunkName method which should return the chunk name in
 *    /tpl/stdstyle/chunks/listOfCaches/
 *  - has proper dataExtractor
 *
 * If 'dataExtractor' is not define every "row" is passing to chunk as is.
 * See the ListOfCachesModel for details of usage.
 */

abstract class AbstractColumn {
    const COLUMN_CHUNK_DIR = __DIR__.'/../../../../tpl/stdstyle/chunks/listOfCaches/';
    private $dataExtractor = null;

    public final function __construct(callable $dataFromRowExtractor=null){
        if(!is_null($dataFromRowExtractor)){
            $this->dataExtractor = $dataFromRowExtractor;
        }
    }

    public final function setDataExtractor(callable $func){
        $this->dataExtractor = $func;
    }

    protected abstract function getChunkName();

    public function __call($method, $args) {
        if (property_exists($this, $method) && is_callable($this->$method)) {
            return call_user_func_array($this->$method, $args);
        }else{
            Debug::errorLog(__METHOD__."Trying to call non-existed method: $method");
        }
    }

    public final function callColumnChunk($row){
        $chunkName = $this->getChunkName();
        $methodName = $chunkName.'Chunk';

        if(!property_exists($this, $methodName)){
            $func = require(self::COLUMN_CHUNK_DIR.$chunkName.'.tpl.php');
            $this->$methodName = $func;
        }

        if(!is_null($this->dataExtractor)){
            $this->$methodName($this->dataExtractor($row));
        }else{
            $this->$methodName($row);
        }
    }

}

