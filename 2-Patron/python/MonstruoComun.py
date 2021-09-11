from typing import Hashable
import Criatura
class MonstruoComun(Criatura):
    def __init__(self, nombre, defensa, ataque, nivel, habilidad, ultimate, resistencia):
        super().__init__(nombre, defensa, ataque, nivel)
        self.__habilidad = habilidad
        self.__ultimate = ultimate
        self.__resistencia = resistencia

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

    def reducirResistencia(self):
        self.__resistencia -= 1

    def decSalud(self, decremento):
        self.__salud -= decremento // self.__
    
    def incNivel(self):
        self.__nivel += 2

    def verStats(self):
        return f"{super().verStats()}\n\
                 Habilidad: {self.__sígueme}\n \
                 Ultimate: {self.__ultimate}\n \
                 Resistencia: {self.__resistencia}\n"