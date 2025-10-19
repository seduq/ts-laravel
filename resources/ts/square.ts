class Square {
    constructor(private sideLength: number) {}

    getArea(): number {
        return this.sideLength ** 2;
    }
    getPerimeter(): number {
        return this.sideLength * 4;
    }
}
export default Square;
