import HabilidadMagica


class Hechizo(HabilidadMagica):
    def __init__(self):
        self.__particulas = None
        self.__daño = None
        self.__costo_mana = None
        self.__enfriamiento = None
        self.__id = None
        self.__sprite = None
        self.__nivel = 0
        self.__animacion = None
