class Sprite:
    def __init__(self, id, file):
        self.__id = id
        self.__archivo = file

    def cargarSprite(self, file):
        self.__archivo = file
        print("Cargando Sprite...")