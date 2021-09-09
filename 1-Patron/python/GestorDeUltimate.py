import Ultimate
class GestorDeUltimate():
    def __init__(self, ultimate):
        self.__ultimate = ultimate

    def subirDeNivel(self, incremento):
        text = 'No se pudo subir de nivel la ultimate'
        exito = self.__ultimate.incNivel(incremento)
        if (exito):
            text = 'Nuevo nivel alcanzado'
        return text
        
    def generarUltimate():
        return Ultimate("Basic Ulti", 10, 1)