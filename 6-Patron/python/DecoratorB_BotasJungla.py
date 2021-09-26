import FabricaDecoradorBendicionBotas
import BendicionBotasJungla


class DecoratorB_BotasJungla(FabricaDecoradorBendicionBotas):
    def __init__(self, bendecirBotasJungla):
        super().__init__()
        self.__bendecirBotasJungla = bendecirBotasJungla

    def bendecirBotasJungla(self, botas):
        return self.__bendecirBotasJungla

    def crearBotas(self):
        self.__bendecirBotasJungla = BendicionBotasJungla(
            'Bendición del dios de la jungla')
