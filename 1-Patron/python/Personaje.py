class Personaje(object):

    def __init__(self, ultimate, arma, armadura, experiencia):
        self.__ultimate = ultimate
        self.__arma = arma
        self.__armadura = armadura
        self.__experiencia = experiencia

    @property
    def ultimate(self):
        return self.__ultimate

    @ultimate.setter
    def ultimate(self, new_ulti):
        self.__ultimate = new_ulti

    def verStats(self):
        return f"Ultimate:{self.__ultimate}\n \
                Arma: {self.__arma}\n \
                Armadura: {self.__armadura}\n \
                Experiencia: {self.__experiencia}"