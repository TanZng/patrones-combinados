class Ultimate(object):

    def __init__(self, nombre, danio, nivel):
        self.__nombre = nombre
        self.__danio = danio
        self.__nivel = nivel

    def incNivel(self, incremento):
        self.__nivel += incremento
        return self.__nivel
