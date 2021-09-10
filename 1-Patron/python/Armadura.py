class Armadura(object):

    def __init__(self, nombre, nivel, danio_recibido, duracion):
        self.__nombre = nombre
        self.__nivel = nivel
        self.__danio_recibido = danio_recibido
        self.__duracion = duracion

    @property
    def nombre(self):
        return self.__nombre

    @nombre.setter
    def nombre(self, new_nombre):
        self.__nombre = new_nombre

    @property
    def nivel(self):
        return self.__nivel

    @nivel.setter
    def nivel(self, new_nivel):
        self.__nivel = new_nivel

    @property
    def danio_recibido(self):
        return self.__danio_recibido

    @danio_recibido.setter
    def danio_recibido(self, new_danio_recibido):
        self.__danio_recibido = new_danio_recibido

    @property
    def duracion(self):
        return self.__duracion

    @duracion.setter
    def duracion(self, new_duracion):
        self.__duracion = new_duracion

    def incDañoRecibido(self, incremento):
        self.__danio_recibido += incremento

    def incDuracion(self, incremento):
        self.__duracion += incremento

    def incNivel(self):
        self.__nivel += 1
