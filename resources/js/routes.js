import Page1 from "./components/Page1";
import Page2 from "./components/Page2";
import Page3 from "./components/Page3";
import Page4 from "./components/Page4";
import Page5 from "./components/Page5";
import Page6 from "./components/Page6";
import Page7 from "./components/Page7";
import Page8 from "./components/Page8";
import Page9 from "./components/Page9";
import Page10 from "./components/Page10";
import Page11 from "./components/Page11";
import Page12 from "./components/Page12";
import all_location from "./components/AllLocation";
import single_location from "./components/SingleLocation";
import emergency_lines from "./components/EmergencyLines";
import question_answer from "./components/QuestionAnswer";
import books_edition  from "./components/BooksEdition";
export const routes= [
 
    {
        path: '/',
        redirect:{
            name:"Page1"
        }
    },
    {
        path: '/Page1',
        name: 'Page1',
        component: Page1
    },
        {
            path: '/page2',
            name: 'Page2',
            component: Page2
        },
        {
            path: '/page3',
            name: 'Page3',
            component: Page3
        },
        {
            path: '/page4',
            name: 'Page4',
            component: Page4
        },
        {
            path: '/page5',
            name: 'Page5',
            component: Page5
        },
        {
            path: '/page6',
            name: 'Page6',
            component: Page6
        },
        {
            path: '/page7',
            name: 'Page7',
            component: Page7
        },
        {
            path: '/page8',
            name: 'Page8',
            component: Page8
        },
        {
            path: '/page9',
            name: 'Page9',
            component: Page9
        },
        {
            path: '/page10',
            name: 'Page10',
            component: Page10
        },
        {
            path: '/page11',
            name: 'Page11',
            component: Page11
        },
        {
            path: '/all_location',
            name: 'all_location',
            component: all_location
        },
        {
            path: '/single_location',
            name: 'single_location',
            component: single_location
        },
        {
            path: '/emergency_lines',
            name: 'emergency_lines',
            component: emergency_lines
        },
        {
            path: '/question_answer',
            name: 'question_answer',
            component: question_answer
        },
        {
            path: '/books_edition',
            name: 'books_edition',
            component: books_edition
        }
    ]