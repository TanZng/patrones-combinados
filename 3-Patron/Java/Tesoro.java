package buildercomposite;

public class Tesoro {
    private float Bonus;
    private int Monedas;
    
    public Tesoro(float bonus, int monedas){
        this.Bonus = bonus;
        this.Monedas = monedas;
    }

 
    
    public float getBonus(){
        return this.Bonus;
    }
    public void setBonus(float bonus){
        this.Bonus = bonus;
    }
    public int getMonedas(){
        return this.Monedas;
    }
    public void setMonedas(int monedas){
        this.Monedas = monedas;
    }
    public void incBonus(){
        this.Bonus += 1.01; 
    }
}
