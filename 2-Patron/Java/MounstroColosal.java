package abstractmasterwhole;
public class MounstroColosal extends Criatura{
    private Resistencia resistencia;
    private Ultimate ultimate;
    private Habilidad habilidad;
    private float multiplicador_dano;

    public MounstroColosal(Resistencia resistencia, Ultimate ultimate, Habilidad habilidad, float multiplicador_dano, String nombre, int defensa, int ataque, int nivel) {
        super(nombre, defensa, ataque, nivel);
        this.resistencia = resistencia;
        this.ultimate = ultimate;
        this.habilidad = habilidad;
        this.multiplicador_dano = multiplicador_dano;
    }

    public Habilidad getHabilidad() {
        return habilidad;
    }

    public float getMultiplicador_dano() {
        return multiplicador_dano;
    }

    public Resistencia getResistencia() {
        return resistencia;
    }

    public Ultimate getUltimate() {
        return ultimate;
    }

    public void setHabilidad(Habilidad habilidad) {
        this.habilidad = habilidad;
    }

    public void setMultiplicador_dano(float multiplicador_dano) {
        this.multiplicador_dano = multiplicador_dano;
    }

    public void setResistencia(Resistencia resistencia) {
        this.resistencia = resistencia;
    }

    public void setUltimate(Ultimate ultimate) {
        this.ultimate = ultimate;
    }

    public Ultimate usarUltimate(){
        return this.ultimate;
    }
    
    public void aumentarResistencia(){
        this.resistencia++;
    }
    
    public float atacar(){
        return this.ataque *this.multiplicador_dano;
    }
    
    
    @Override
    public int decSalud(int dec) {
        this.salud -= dec/ (this.resistencia*this.defensa);
    }
 

    @Override
    public int incNivel() {
        return this.nivel +=2;
    }

 
    @Override
    public String verStats() {
        return ("Hablidad " +this.habilidad +"\nUltimate: "+ this.ultimate +"\nResistencia: "+ this.resistencia +"Multiplicar Daño"+ this.)
    }
     
    
    
    
}
