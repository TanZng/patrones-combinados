class Arma(object):

    def __init__(self, nombre, danio_infligido, duracion, nivel):
        self.__nombre = nombre
        self.__danio_infligido = danio_infligido
        self.__duracion = duracion
        self.__nivel = nivel
        self.__hechizo = None
    
    @property
    def nombre(self):
        return self.__nombre

    @nombre.setter
    def nombre(self, new_nombre):
        self.__nombre = new_nombre

    @property
    def danio_infligido(self):
        return self.__danio_infligido

    @danio_infligido.setter
    def danio_infligido(self, new_danio_infligido):
        self.__danio_infligido = new_danio_infligido

    @property
    def hechizo(self):
        return self.__hechizo

    @hechizo.setter
    def hechizo(self, new_hechizo):
        self.__hechizo = new_hechizo

    @property
    def duracion(self):
        return self.__duracion

    @duracion.setter
    def duracion(self, new_duracion):
        self.__duracion = new_duracion

    @property
    def nivel(self):
        return self.__nivel

    @nivel.setter
    def nivel(self, new_nivel):
        self.__nivel = new_nivel

    def aumentarDaño(self, aumento):
        self.__danio_recibido += aumento
        return self.__danio_recibido

    def setHechizo(self, hechizo):
        self.__hechizo = hechizo

    def incNivel(self):
        self.__nivel += 1
