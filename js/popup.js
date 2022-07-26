let doc = document;

let num_slide = 1;
let title_slide = {
    '1': 'Какой стиль домов вам нравится?',
    '2': 'Какая площадь должна быть у вашего дома?',
    '3': 'Сколько этажей должно быть в вашем доме?',
    '4': 'Когда планируете начать строительство?',
    '5': 'Есть ли у вас земельный участок?',
    '6': 'Заполните данные и получите варианты домов со сметами!',
};

doc.querySelector(".form-item__button-next").addEventListener("click", () => {
    if (num_slide >= 1) {
        document.querySelector('.form-item__button-prev').disabled = false;
        document.querySelector('.arrow-prev').style.fill = "#fff";
        document.querySelector('.form-item__button-prev').style.borderColor = "#fff";
        if (num_slide >= 5) {
            document.querySelector('.form-item__button-wrapper').style.display = "none";
            document.querySelector('.form-item__button-next').disabled = true;
        }
    } else {
        document.querySelector('.form-item__button-prev').disabled = true;
    }
    doc.querySelector(`.calculate-cost-item-${num_slide}`).style.display = "none";
    num_slide++;
    doc.querySelector(`.calculate-cost-item-${num_slide}`).style.display = "flex";
    doc.querySelector(".popup-item-title").innerHTML = title_slide[num_slide];
    doc.querySelector(".question-number-active").innerHTML = num_slide;

});
doc.querySelector(".form-item__button-prev").addEventListener("click", () => {
    if (num_slide == 2) {
        document.querySelector('.form-item__button-prev').disabled = true;
    }
    doc.querySelector(`.calculate-cost-item-${num_slide}`).style.display = "none";
    num_slide--
    doc.querySelector(`.calculate-cost-item-${num_slide}`).style.display = "flex";
    doc.querySelector(".popup-item-title").innerHTML = title_slide[num_slide];
    doc.querySelector(".question-number-active").innerHTML = num_slide;
});