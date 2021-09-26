import ISkinLocal
import Skin


class AdaptadorC_SkinLocal(ISkinLocal, Skin):
    def __init__(self):
        super().__init__()
        self.__skin = None

    def cargarSkinLocal(self, ruta):
        self.__skin = ruta
        self.__tipo = 'Local'

    def mostrarSkin(self):
        print(f"<img src='{self.__skin}' alt='skin'>")
