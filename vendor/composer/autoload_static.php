<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc46e3a35fb3dbb2956b1c3fe32c9cba7
{
    public static $files = array (
        '2cffec82183ee1cea088009cef9a6fc3' => __DIR__ . '/..' . '/ezyang/htmlpurifier/library/HTMLPurifier.composer.php',
        '3917c79c5052b270641b5a200963dbc2' => __DIR__ . '/..' . '/kint-php/kint/init.php',
    );

    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
        'o' => 
        array (
            'okapi\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'okapi\\' => 
        array (
            0 => __DIR__ . '/../..' . '/okapi',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PHPQRCode' => 
            array (
                0 => __DIR__ . '/..' . '/aferrandini/phpqrcode/lib',
            ),
        ),
        'H' => 
        array (
            'HTMLPurifier' => 
            array (
                0 => __DIR__ . '/..' . '/ezyang/htmlpurifier/library',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Kint' => __DIR__ . '/..' . '/kint-php/kint/src/Kint.php',
        'Kint_Object' => __DIR__ . '/..' . '/kint-php/kint/src/Object.php',
        'Kint_Object_Blob' => __DIR__ . '/..' . '/kint-php/kint/src/Object/Blob.php',
        'Kint_Object_Closure' => __DIR__ . '/..' . '/kint-php/kint/src/Object/Closure.php',
        'Kint_Object_Color' => __DIR__ . '/..' . '/kint-php/kint/src/Object/Color.php',
        'Kint_Object_DateTime' => __DIR__ . '/..' . '/kint-php/kint/src/Object/DateTime.php',
        'Kint_Object_Instance' => __DIR__ . '/..' . '/kint-php/kint/src/Object/Instance.php',
        'Kint_Object_Method' => __DIR__ . '/..' . '/kint-php/kint/src/Object/Method.php',
        'Kint_Object_Nothing' => __DIR__ . '/..' . '/kint-php/kint/src/Object/Nothing.php',
        'Kint_Object_Parameter' => __DIR__ . '/..' . '/kint-php/kint/src/Object/Parameter.php',
        'Kint_Object_Representation' => __DIR__ . '/..' . '/kint-php/kint/src/Object/Representation.php',
        'Kint_Object_Representation_Color' => __DIR__ . '/..' . '/kint-php/kint/src/Object/Representation/Color.php',
        'Kint_Object_Representation_Docstring' => __DIR__ . '/..' . '/kint-php/kint/src/Object/Representation/Docstring.php',
        'Kint_Object_Representation_Microtime' => __DIR__ . '/..' . '/kint-php/kint/src/Object/Representation/Microtime.php',
        'Kint_Object_Representation_Source' => __DIR__ . '/..' . '/kint-php/kint/src/Object/Representation/Source.php',
        'Kint_Object_Representation_SplFileInfo' => __DIR__ . '/..' . '/kint-php/kint/src/Object/Representation/SplFileInfo.php',
        'Kint_Object_Resource' => __DIR__ . '/..' . '/kint-php/kint/src/Object/Resource.php',
        'Kint_Object_Stream' => __DIR__ . '/..' . '/kint-php/kint/src/Object/Stream.php',
        'Kint_Object_Throwable' => __DIR__ . '/..' . '/kint-php/kint/src/Object/Throwable.php',
        'Kint_Object_Trace' => __DIR__ . '/..' . '/kint-php/kint/src/Object/Trace.php',
        'Kint_Object_TraceFrame' => __DIR__ . '/..' . '/kint-php/kint/src/Object/TraceFrame.php',
        'Kint_Parser' => __DIR__ . '/..' . '/kint-php/kint/src/Parser.php',
        'Kint_Parser_Base64' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/Base64.php',
        'Kint_Parser_Binary' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/Binary.php',
        'Kint_Parser_Blacklist' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/Blacklist.php',
        'Kint_Parser_ClassMethods' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/ClassMethods.php',
        'Kint_Parser_ClassStatics' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/ClassStatics.php',
        'Kint_Parser_Closure' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/Closure.php',
        'Kint_Parser_Color' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/Color.php',
        'Kint_Parser_DOMIterator' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/DOMIterator.php',
        'Kint_Parser_DOMNode' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/DOMNode.php',
        'Kint_Parser_DateTime' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/DateTime.php',
        'Kint_Parser_FsPath' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/FsPath.php',
        'Kint_Parser_Iterator' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/Iterator.php',
        'Kint_Parser_Json' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/Json.php',
        'Kint_Parser_Microtime' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/Microtime.php',
        'Kint_Parser_Plugin' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/Plugin.php',
        'Kint_Parser_Serialize' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/Serialize.php',
        'Kint_Parser_SimpleXMLElement' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/SimpleXMLElement.php',
        'Kint_Parser_SplFileInfo' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/SplFileInfo.php',
        'Kint_Parser_SplObjectStorage' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/SplObjectStorage.php',
        'Kint_Parser_Stream' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/Stream.php',
        'Kint_Parser_Table' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/Table.php',
        'Kint_Parser_Throwable' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/Throwable.php',
        'Kint_Parser_Timestamp' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/Timestamp.php',
        'Kint_Parser_ToString' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/ToString.php',
        'Kint_Parser_Trace' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/Trace.php',
        'Kint_Parser_Xml' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/Xml.php',
        'Kint_Renderer' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer.php',
        'Kint_Renderer_Cli' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Cli.php',
        'Kint_Renderer_Plain' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Plain.php',
        'Kint_Renderer_Rich' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Rich.php',
        'Kint_Renderer_Rich_Binary' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Rich/Binary.php',
        'Kint_Renderer_Rich_Blacklist' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Rich/Blacklist.php',
        'Kint_Renderer_Rich_Callable' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Rich/Callable.php',
        'Kint_Renderer_Rich_Closure' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Rich/Closure.php',
        'Kint_Renderer_Rich_Color' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Rich/Color.php',
        'Kint_Renderer_Rich_ColorDetails' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Rich/ColorDetails.php',
        'Kint_Renderer_Rich_DepthLimit' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Rich/DepthLimit.php',
        'Kint_Renderer_Rich_Docstring' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Rich/Docstring.php',
        'Kint_Renderer_Rich_Microtime' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Rich/Microtime.php',
        'Kint_Renderer_Rich_Nothing' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Rich/Nothing.php',
        'Kint_Renderer_Rich_Plugin' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Rich/Plugin.php',
        'Kint_Renderer_Rich_Recursion' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Rich/Recursion.php',
        'Kint_Renderer_Rich_SimpleXMLElement' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Rich/SimpleXMLElement.php',
        'Kint_Renderer_Rich_Source' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Rich/Source.php',
        'Kint_Renderer_Rich_Table' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Rich/Table.php',
        'Kint_Renderer_Rich_Timestamp' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Rich/Timestamp.php',
        'Kint_Renderer_Rich_TraceFrame' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Rich/TraceFrame.php',
        'Kint_Renderer_Text' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Text.php',
        'Kint_Renderer_Text_Blacklist' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Text/Blacklist.php',
        'Kint_Renderer_Text_DepthLimit' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Text/DepthLimit.php',
        'Kint_Renderer_Text_Nothing' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Text/Nothing.php',
        'Kint_Renderer_Text_Plugin' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Text/Plugin.php',
        'Kint_Renderer_Text_Recursion' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Text/Recursion.php',
        'Kint_Renderer_Text_Trace' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Text/Trace.php',
        'Kint_SourceParser' => __DIR__ . '/..' . '/kint-php/kint/src/SourceParser.php',
        'OpenChecker\\OpenCheckerCore' => __DIR__ . '/../..' . '/modules/openchecker/openchecker_classes.php',
        'OpenChecker\\OpenCheckerSetup' => __DIR__ . '/../..' . '/modules/openchecker/openchecker_classes.php',
        'OpenChecker\\Pagination' => __DIR__ . '/../..' . '/modules/openchecker/openchecker_classes.php',
        'OpenChecker\\convertLongLat' => __DIR__ . '/../..' . '/modules/openchecker/openchecker_classes.php',
        'powerTrailBase' => __DIR__ . '/../..' . '/powerTrail/powerTrailBase.php',
        'powerTrailController' => __DIR__ . '/../..' . '/powerTrail/powerTrailController.php',
        'sendEmail' => __DIR__ . '/../..' . '/powerTrail/sendEmail.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc46e3a35fb3dbb2956b1c3fe32c9cba7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc46e3a35fb3dbb2956b1c3fe32c9cba7::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitc46e3a35fb3dbb2956b1c3fe32c9cba7::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitc46e3a35fb3dbb2956b1c3fe32c9cba7::$classMap;

        }, null, ClassLoader::class);
    }
}
