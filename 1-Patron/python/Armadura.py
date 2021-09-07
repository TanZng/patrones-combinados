class Armadura(object):

    def __init__(self, nombre, nivel, danio_recibido, duracion):
        self.__nombre = nombre
        self.__nivel = nivel
        self.__danio_recibido = danio_recibido
        self.__duracion = duracion

    def incDañoRecibido(self, incremento):
        self.__danio_recibido += incremento

    def incDuracion(self, incremento):
        self.__duracion += incremento

    def incNivel(self):
        self.__nivel += 1
