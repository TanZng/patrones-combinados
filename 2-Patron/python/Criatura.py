import abc
class Criatura(abc.ABC):
    def __init__(self, nombre, defensa, ataque, nivel):
        self.__nombre = nombre
        self.__defensa = defensa
        self.__ataque = ataque
        self.__nivel = nivel

    @property
    def nombre(self):
        return self.__nombre

    @nombre.setter
    def nombre(self, nombre):
        self.__nombre = nombre

    @property
    def defensa(self):
        return self.__defensa

    @defensa.setter
    def defensa(self, defensa):
        self.__defensa = defensa

    @property
    def ataque(self):
        return self.__ataque

    @ataque.setter
    def defensa(self, ataque):
        self.__ataque = ataque

    @property
    def nivel(self):
        return self.__nivel

    @nivel.setter
    def defensa(self, nivel):
        self.__nivel = nivel

    @abc.abstractclassmethod
    def decSalud(self):
        pass
    
    @abc.abstractclassmethod
    def incNivel(self):
        pass

    @abc.abstractclassmethod
    def verStats(self):
        return f"Nombre: {self.__nombre}\n\
                 Defensa: {self.__defensa}\n\
                 Ataque: {self.__ataque}\n\
                 Nivel: {self.__nivel}\n"

