import Ultimate
class GestorDeUltimate():
    def __init__(self, ultimate):
        self.__ultimate = ultimate

    def subirDeNivel(self, incremento):
        return self.__ultimate.incNivel(incremento)
        
    def generarUltimate():
        return Ultimate("Basic", 10, 1)