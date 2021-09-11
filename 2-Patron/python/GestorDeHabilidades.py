import Habilidad


class GestorDeHabilidades():
    def __init__(self, habilidad):
        self.__habilidad = habilidad

    def generarResistencia(self):
        return Habilidad(1, 10)
