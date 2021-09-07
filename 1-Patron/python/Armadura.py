class Armadura(object):

    def __init__(self, nombre, nivel, danio_recibido, duracion):
        self.nombre = nombre
        self.nivel = nivel
        self.danio_recibido = danio_recibido
        self.duracion = duracion

    def incDañoRecibido(self, incremento):
        self.danio_recibido += incremento

    def incDuracion(self, incremento):
        self.duracion += incremento

    def incNivel(self):
        self.nivel += 1
