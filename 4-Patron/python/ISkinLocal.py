import abc


class ISkinLocal(abc.ABC):
    @abc.abstractclassmethod
    def cargarSkinLocal(self):
        pass

    @abc.abstractclassmethod
    def mostrarSkin(self):
        pass
