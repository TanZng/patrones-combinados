class InfoSkin:
    def __init__(self, autor, fecha, descripcion):
        self.__autor = autor
        self.__fechaCreacion = fecha
        self.__descripcion = descripcion

    @property
    def autor(self):
        return self.__autor

    @autor.setter
    def autor(self, new):
        self.__autor = new

    @property
    def fechaCreacion(self):
        return self.__fechaCreacion

    @fechaCreacion.setter
    def fechaCreacion(self, new):
        self.__fechaCreacion = new

    @property
    def descripcion(self):
        return self.__descripcion

    @descripcion.setter
    def descripcion(self, new):
        self.__descripcion = new

    def getInfoSkin(self):
        return [self.__autor, self.__fechaCreacion, self.__descripcion]
