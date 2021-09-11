import Criatura


class MascotaGrande(Criatura):
    def __init__(self, nombre, defensa, ataque, nivel):
        super().__init__(nombre, defensa, ataque, nivel)
        self.__montura = None
        self.__armadura = None
        self.__ultimate = None

    @property
    def montura(self):
        return self.__montura

    @montura.setter
    def montura(self, montura):
        self.__montura = montura

    @property
    def armadura(self):
        return self.__armadura

    @armadura.setter
    def armadura(self, armadura):
        self.__armadura = armadura

    @property
    def ultimate(self):
        return self.__ultimate

    @ultimate.setter
    def ultimate(self, ultimate):
        self.__ultimate = ultimate

    def usarUltimate(self):
        return self.__ultimate

    def atacar(self):
        return self.__ataque * (self.__nivel * 0.5)

    def decSalud(self, decremento):
        self.__salud -= decremento // self.__armadura
        return self.__salud

    def incNivel(self):
        self.__nivel += 1
        return self.__nivel

    def verStats(self):
        return f"{super().verStats()}\n\
                 Montura: {self.__montura}\n\
                 Armadura: {self.__armadura}\n\
                 Ultimate: {self.__ultimate}\n"
