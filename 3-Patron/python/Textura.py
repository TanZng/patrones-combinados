class Textura:
    def __init__(self, imagen, alto, ancho):
        self.__imagen = imagen
        self.__alto = alto
        self.__ancho = ancho

    @property
    def imagen(self):
        return self.__imagen

    @imagen.setter
    def imagen(self, new):
        self.__imagen = new

    @property
    def alto(self):
        return self.__alto

    @alto.setter
    def alto(self, new):
        self.__alto = new

    @property
    def ancho(self):
        return self.__ancho

    @ancho.setter
    def ancho(self, new):
        self.__ancho = new

    def setImagen(self, imagen):
        self.__imagen = imagen
