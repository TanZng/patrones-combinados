class Experiencia(object):

    def __init__(self):
        self.__total = 0
        self.__nueva = 0

    def incTotal(self, incremento):
        self.__total += incremento

    def decNueva(self, incremento):
        self.__total -= incremento

    def incNueva(self, incremento):
        self.__nueva += incremento

