import Botas


class BendicionBotasJungla(Botas):
    def __init__(self, habilidad):
        super().__init__()
        self.__habilidad = habilidad

    @property
    def habilidad(self):
        return self.__habilidad

    @habilidad.setter
    def habilidad(self, habilidad):
        self.__habilidad = habilidad

    def activarHabilidadRetribucion(self):
        self.__habilidad = 'Retribucion del angel caido'

    def verBotas(self):
        print(f"Habilidad: {self.__habilidad} ")
