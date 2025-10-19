class Square {
    constructor(private sideLength: number) {}

    getArea(): number {
        return this.sideLength ** 2;
    }
}
export default Square;
