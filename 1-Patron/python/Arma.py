class Arma(object):

    def __init__(self, nombre, danio_infligido, hechizo, duracion, nivel):
        self.__nombre = nombre
        self.__danio_infligido = danio_infligido
        self.__hechizo = hechizo
        self.__duracion = duracion
        self.__nivel = nivel
        self.__hechizo = None

    def aumentarDaño(self, aumento):
        self.__danio_recibido += aumento

    def setHechizo(self, hechizo):
        self.__hechizo = hechizo

    def incNivel(self):
        self.__nivel += 1
