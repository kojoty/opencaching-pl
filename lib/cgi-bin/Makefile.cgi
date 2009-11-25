CC=gcc
CFLAGS=-O2
BINARY=mapper.cgi
OBJECTS=hashtable.o hashtable_itr.o microcgi.o mapper.o config.o IMG_savepng.o
LDFLAGS=

all: clean $(BINARY)

$(BINARY): $(OBJECTS)
	$(CC) $(OBJECTS) -o $(BINARY) $(LDFLAGS) -lmysqlclient -lm `sdl-config --libs` -lpng -lSDL_image -lSDL_gfx -lSDL_ttf

%.o: %.c
	$(CC) $< -c -o $@ $(CFLAGS) -std=c99 -D_BSD_SOURCE -g `sdl-config --cflags`

clean:
	rm -f $(OBJECTS) $(BINARY)