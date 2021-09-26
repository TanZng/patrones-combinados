class TexturaSkin:
    def __init__(self, rutaTextura):
        self.__rutaTextura = rutaTextura

    @property
    def rutaTextura(self):
        return self.__rutaTextura

    @rutaTextura.setter
    def rutaTextura(self, new):
        self.__rutaTextura = new

    def mostrarTextura(self):
        print(f"<img src='{rutaTextura}' alt='skin'>")
