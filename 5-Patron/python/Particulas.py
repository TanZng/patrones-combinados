class Particulas:
    def __init__(self, id, file):
        self.__id = id
        self.__archivo = file

    def cargarParticulas(self, file):
        self.__archivo = file
        print("Cargando particulas...")
