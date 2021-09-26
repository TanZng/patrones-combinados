package masterwholeproxy;

public class Experiencia {
    private int total;
    private int nueva; 
    public Experiencia(){
        this.total = 0;
        this.nueva = 0;
    }
    public int getTotal(){
        return this.total;
    }
    public int getNueva(){
        return this.nueva;
    }
    public void setTotal(int total){
        this.total = total;
    }
    public void setNueva(int nueva){
        this.nueva = nueva;
    }
    public void incTotal(int incremento){
        this.total += incremento; 
    }
    public void decNueva(int decremento){
        this.nueva -= decremento;
    }
    public void incNueva(int incremento){
        this.nueva = incremento;
    }
}
