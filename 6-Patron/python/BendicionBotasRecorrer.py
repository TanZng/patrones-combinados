import Botas


class BendicionBotasRecorrer(Botas):
    def __init__(self, habilidad):
        super().__init__()
        self.__habilidad = habilidad

    @property
    def habilidad(self):
        return self.__habilidad

    @habilidad.setter
    def habilidad(self, habilidad):
        self.__habilidad = habilidad

    def ActivarHabilidadFuria(self):
        self.__habilidad = 'Furia divina'
