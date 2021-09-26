import ISkinLocal
import SkinOnline


class AdaptadorC_SkinLocal(ISkinLocal, Skin):
    def __init__(self):
        super().__init__()
        self.__skin = None

    def cargarSkinLocal(self, url):
        info, textura = self.getFromServer(url)
        self.__skin = SkinOnline(info, textura)
        self.__tipo = 'Online'

    def mostrarSkin(self):
        return self.__skin.mostrarTexturaSkin()
