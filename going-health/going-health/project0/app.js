new fullpage ("#fullpage",{
    autoScrolling :true,
    navigation: true,
    onLeave:(origin,destination) => {
        const section = destination.item;
        const title = section.querySelector("h1");
        const t1 = new TimeLineMax({delay:0.5});
        t1.fromTo(title,0.5,{y:"50",opacity:0},{y:0,opasity:1});
    }
})