import IMapa


class Map(IMapa):
    def __init__(self, mazmorra, tesoro, textura):
        self.__mazmorra = mazmorra
        self.__tesoro = tesoro
        self.__textura = textura

    @property
    def mazmorra(self):
        return self.__mazmorra

    @mazmorra.setter
    def mazmorra(self, new):
        self.__mazmorra = new

    @property
    def tesoro(self):
        return self.__tesoro

    @tesoro.setter
    def tesoro(self, new):
        self.__tesoro = new

    @property
    def textura(self):
        return self.__textura

    @textura.setter
    def textura(self, new):
        self.__textura = new

    def verMapa(self):
        return f"Mazmorra: {self.__mazmorra}\n \
                 Tesoro: {self.__tesoro}\n \
                 Textura: {self.__textura}\n"
