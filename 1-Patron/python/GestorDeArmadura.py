import Armadura

class GestorDeArmadura():
    def __init__(self, armadura):
        self.__armadura = armadura

    def mejorarArmadura(self, incremento):
        return self.__armadura.incNivel(incremento)
    
    def repararArmadura(self, incremento):
        return self.__armadura.incDuracion(incremento)

    def generarArmadura():
        return Armadura("Basica", 1, 10, 100)