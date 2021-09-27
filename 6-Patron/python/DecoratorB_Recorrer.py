import FabricaDecoradorBendicionBotas
import BendicionBotasRecorrer


class DecoratorB_Recorrer(FabricaDecoradorBendicionBotas):
    def __init__(self, bendecirBotasRecorrer):
        super().__init__()
        self.__bendecirBotasRecorrer = bendecirBotasRecorrer

    def bendecirBotasJungla(self, botas):
        return self.__bendecirBotasRecorrer

    def crearBotas(self):
        self.__bendecirBotasRecorrer = BendicionBotasRecorrer(
            'Bendición para correr')
