import Criatura


class MonstruoColosal(Criatura):
    def __init__(self, nombre, defensa, ataque, nivel, habilidad, ultimate, resistencia, multiplicador_daño):
        super().__init__(nombre, defensa, ataque, nivel)
        self.__habilidad = habilidad
        self.__ultimate = ultimate
        self.__resistencia = resistencia
        self.__multiplicador_daño = multiplicador_daño

    @property
    def habilidad(self):
        return self.__habilidad

    @habilidad.setter
    def habilidad(self, new):
        self.__habilidad = new

    @property
    def ultimate(self):
        return self.__ultimate

    @ultimate.setter
    def ultimate(self, new):
        self.__ultimate = new

    @property
    def resistencia(self):
        return self.__resistencia

    @resistencia.setter
    def resistencia(self, new):
        self.__resistencia = new

    @property
    def multiplicador_daño(self):
        return self.__multiplicador_daño

    @multiplicador_daño.setter
    def multiplicador_daño(self, new):
        self.__multiplicador_daño = new

    def usarUltimate(self):
        return self.__ultimate

    def aumentarResistencia(self):
        self.__resistencia.aumentar()
        return self.__resistencia

    def atacar(self):
        return self.__ataque * self.__multiplicador_daño

    def decSalud(self, decremento):
        self.__salud -= decremento // (self.__resistencia.valor()
                                       * self.__defensa)

    def incNivel(self):
        self.__nivel += 2

    def verStats(self):
        return f"{super().verStats()}\n\
                 Habilidad: {self.__sígueme}\n \
                 Ultimate: {self.__ultimate}\n \
                 Resistencia: {self.__resistencia}\n \
                 Multiplicar Daño: {self.__multiplicador_daño}"
