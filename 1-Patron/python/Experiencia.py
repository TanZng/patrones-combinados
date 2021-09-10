class Experiencia(object):

    def __init__(self):
        self.__total = 0
        self.__nueva = 0

    @property
    def total(self):
        return self.__total

    @total.setter
    def total(self, new_total):
        self.__total = new_total

    @property
    def nueva(self):
        return self.__nueva

    @total.setter
    def nueva(self, new):
        self.__nueva = new

    def incTotal(self, incremento):
        self.__total += incremento

    def decNueva(self, incremento):
        self.__total -= incremento

    def incNueva(self, incremento):
        self.__nueva += incremento

