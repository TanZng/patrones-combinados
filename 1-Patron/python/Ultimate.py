class Ultimate(object):

    def __init__(self, nombre, danio, nivel):
        self.__nombre = nombre
        self.__danio = danio
        self.__nivel = nivel

    @property
    def nombre(self):
        return self.__nombre

    @nombre.setter
    def nombre(self, new_nombre):
        self.__nombre = new_nombre

    @property
    def danio(self):
        return self.__danio

    @danio.setter
    def danio(self, new_danio):
        self.__danio = new_danio

    @property
    def nivel(self):
        return self.__nivel

    @nivel.setter
    def nivel(self, new_nivel):
        self.__nivel = new_nivel

    def incNivel(self, incremento):
        self.__nivel += incremento
        return self.__nivel
