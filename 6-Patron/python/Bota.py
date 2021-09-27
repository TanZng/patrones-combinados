import Botas


class Bota(Botas):
    def __init__(self, velocidad):
        super().__init__()
        self.__velocidad = velocidad

    @property
    def velocidad(self):
        return self.__velocidad

    @velocidad.setter
    def velocidad(self, new):
        self.__velocidad = new

    def verBotas(self):
        print(f"Velocidad: {self.__velocidad}")
