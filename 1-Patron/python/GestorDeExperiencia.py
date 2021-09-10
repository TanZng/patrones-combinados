import Experiencia

class GestorDeExperiencia():
    def __init__(self, experiencia):
        self.__experiencia = experiencia

    def subirExperiencia(self, incremento):
        return self.__experiencia.incTotal(incremento)
        
    def generarExperiencia(self):
        return Experiencia()
