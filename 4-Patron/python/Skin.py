from _typeshed import Self


class Skin:
    def __init__(self, nombre, tipo):
        self.__nombre = nombre
        self.__tipo = tipo

    @property
    def nombre(self):
        return self.__nombre

    @nombre.setter
    def nombre(self, new):
        self.__nombre = new

    @property
    def tipo(self):
        return self.__tipo

    @tipo.setter
    def tipo(self, new):
        self.__tipo = new
