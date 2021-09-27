import FabricaBotas


class FabricaDecorador_BendicionBotas(FabricaBotas):
    def __init__(self, botasNormales, creaBotaAgregada) -> None:
        super().__init__()
        self.__botasNormales = botasNormales
        self.__creaBotaAgregada = creaBotaAgregada

    def crearBotas(self):
        pass

    def bendecirBotas(self):
        pass
