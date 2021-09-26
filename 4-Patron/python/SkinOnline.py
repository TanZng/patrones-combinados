class SkinOnline:
    def __init__(self, info, textura):
        self.__infoSkin = info
        self.__texturaSkin = textura

    def getInfoSkin(self):
        return self.__infoSkin

    def setInfoSkin(self, nInfo):
        self.__infoSkin = nInfo

    def getTextura(self):
        return self.__texturaSkin

    def setTextura(self, nTextura):
        self.__texturaSkin = nTextura

    def mostrarInfoSkin(self):
        infSkin = self.__infoSkin.getInfoSkin()
        return f"Autor: . {infSkin[0]} . \
                Fecha: . {infSkin[1]}. \
                Descripción: {infSkin[2]}. "

    def mostrarTexturaSkin(self):
        self.__texturaSkin.mostrarTextura()
