package abstractmasterwhole;
public class MounstroComun extends Criatura {
    private Habilidad habilidad;
    private Ultimate ultimate;
    private Resistencia resistencia;

    public MounstroComun(Habilidad habilidad, Ultimate ultimate, Resistencia resistencia, String nombre, int defensa, int ataque, int nivel) {
        super(nombre, defensa, ataque, nivel);
        this.habilidad = habilidad;
        this.ultimate = ultimate;
        this.resistencia = resistencia;
    }
    

    public Habilidad getHabilidad() {
        return habilidad;
    }

    public void setHabilidad(Habilidad habilidad) {
        this.habilidad = habilidad;
    }

    public Ultimate getUltimate() {
        return ultimate;
    }

    public void setUltimate(Ultimate ultimate) {
        this.ultimate = ultimate;
    }

    public Resistencia getResistencia() {
        return resistencia;
    }

    public void setResistencia(Resistencia resistencia) {
        this.resistencia = resistencia;
    }

    @Override
    public int decSalud(int decremento) {
        return this.salud -= decremento; 
    }

    @Override
    public int incNivel() {
        return this.nivel +=2;
    }

    @Override
    public String verStats() {
        return super.verStats() + "Hablidad: "+this.habilidad + "Ultimate: " this.ultimate + "Experiencia: "+this.experiencia; //To change body of generated methods, choose Tools | Templates.
    }


    
    

    
    
     
}
