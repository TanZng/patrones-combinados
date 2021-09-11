from _typeshed import Self
import Criatura
class MascotaPequeña(Criatura):
    def __init__(self, nombre, defensa, ataque, nivel):
        super().__init__(nombre, defensa, ataque, nivel)
        self.__sígueme = True

    @property
    def sígueme(self):
        return self.__sígueme

    @sígueme.setter
    def sígueme(self, new):
        self.__sígueme = new

    def pasear(self):
        self.__sígueme = True
        return self.__sígueme

    def sentar(self):
        self.__sígueme = False
        return self.__sígueme

    def verStats(self):
        return f"{super().verStats()}\n\
                 Sígueme: {self.__sígueme}\n"
