class Experiencia(object):

    def __init__(self):
        self.total = 0
        self.nueva = 0

    def incTotal(self, incremento):
        self.total += incremento

    def decNueva(self, incremento):
        self.total -= incremento

    def incNueva(self, incremento):
        self.nueva += incremento

