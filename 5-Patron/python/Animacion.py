class Animacion:
    def __init__(self, id, file):
        self.__id = id
        self.__archivo = file

    def cargarAnimacion(self, file):
        self.__archivo = file
        print("Cargando Animación...")
