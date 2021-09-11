class Montura:
    def __init__(self, nombre, velocidad, nivel):
        self.__nombre = nombre
        self.__velocidad = velocidad
        self.__nivel = nivel
    
    @property
    def nombre(self):
        return self.__nombre

    @nombre.setter
    def nombre(self, new):
        self.__nombre = new

    @property
    def velocidad(self):
        return self.__velocidad

    @velocidad.setter
    def velocidad(self, new):
        self.__velocidad = new

    @property
    def nivel(self):
        return self.__nivel

    @nivel.setter
    def nivel(self, new):
        self.__nivel = new

    def incNivel(self):
        self.__nivel += 1
        return self.__nivel