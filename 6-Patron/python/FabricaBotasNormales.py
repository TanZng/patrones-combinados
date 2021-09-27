import FabricaBotas
import Bota


class Fabrica_BotasNormales(FabricaBotas):
    def __init__(self, botasNormales):
        super().__init__()
        self.__botasNormales = botasNormales

    def solicitarBotas(self):
        return self.__botasNormales

    def crearBotas(self):
        self.__botasNormales = Bota(100)
