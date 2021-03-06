import React, {memo} from 'react';
import style from './style.css';

const Title = (props) => (
  <h1 className={style.title}>
    {props.title}
  </h1>
);

export default memo(Title, () => true);
