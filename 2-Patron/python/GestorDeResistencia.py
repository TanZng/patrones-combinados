import Resistencia


class GestorDeResistencia():
    def __init__(self, resistencia):
        self.__resistencia = resistencia

    def generarResistencia(self):
        return Resistencia(1, 10)
